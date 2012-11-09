package wsGreenways.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import wsGreenways.Bean;
import wsGreenways.BeanLoader;
import wsGreenways.DBUtil;
import wsGreenways.enums.Attribute;
import wsGreenways.enums.Table;
import wsGreenways.exceptions.WSGDNEException;
import wsGreenways.exceptions.WSGInvalidAttributeException;
import wsGreenways.exceptions.WSGUnsupportedAttributeTypeException;

/**
 * Used for managing all static information related to a greenway. For other information related to all aspects
 * of greenway care, see the other DAOs.
 * 
 * DAO stands for Database Access Object. All DAOs are intended to be reflections of the database, that is,
 * one DAO per table in the database (most of the time). For more complex sets of queries, extra DAOs are
 * added. DAOs can assume that all data has been validated and is correct.
 * 
 * DAOs should never have setters or any other parameter to the constructor than a factory. All DAOs should be
 * accessed by DAOFactory (@see {@link DAOFactory}) and every DAO should have a factory - for obtaining JDBC
 * connections and/or accessing other DAOs.
 * 
 * @author Andy
 * 
 */
public class BeanDAO {
	
	protected Table table;
	private DAOFactory factory;
	private BeanLoader beanLoader;

	public BeanDAO(DAOFactory factory, Table table) {
		this.factory = factory;
		this.beanLoader = new BeanLoader(table);
		this.table = table;
	}

	public Object getAttribute(Attribute attribute, long mid) throws WSGDNEException, SQLException {
		Connection conn = null;
		PreparedStatement ps = null;
		try {
			conn = factory.getConnection();
			ps = conn.prepareStatement(String.format("SELECT ? FROM %s WHERE MID=?", table.getSqlTable()));
			int i = 1;
			ps.setString(i++, attribute.getName());
			ps.setLong(i++, mid);
			ResultSet rs = ps.executeQuery();
			if (rs.next()) {
				return rs.getObject(1);
			} else {
				throw new WSGDNEException(String.format("%s %d does not exist", table.getSqlTable(), mid));
			}
		} catch (SQLException e) {
			e.printStackTrace();
			throw e;
		} finally {
			DBUtil.closeConnection(conn, ps);
		}
	}
	
	public void editPrimaryTable(Bean b) throws SQLException, WSGInvalidAttributeException, WSGUnsupportedAttributeTypeException {
		Connection conn = null;
		PreparedStatement ps = null;
		try {
			conn = factory.getConnection();
			String updateStatement = String.format("UPDATE %s SET", table.getSqlTable());
			int i = 1;
			for(Attribute a : b.getValidAttributes()) {
				updateStatement = updateStatement.concat(String.format(" %s=?,", a.getSqlHeader()));
				i++;
			}
			updateStatement = updateStatement.substring(0,updateStatement.length()-1).concat(String.format(" WHERE MID = ?"));
			ps = conn.prepareStatement(updateStatement);

			beanLoader.loadParameters(ps, b);
			ps.setObject(i, b.getAttribute(Attribute.MID));
			ps.executeUpdate();
			
		} catch (SQLException e) {
			e.printStackTrace();
			throw e;
		} finally {
			DBUtil.closeConnection(conn, ps);
		}
	}
	
	public List<Bean> getAllPrimaryTable() throws SQLException, WSGInvalidAttributeException, WSGUnsupportedAttributeTypeException {
		Connection conn = null;
		PreparedStatement ps = null;
		try {
			conn = factory.getConnection();
			ps = conn.prepareStatement(String.format("SELECT * FROM %s", table.getSqlTable()));
			ResultSet rs = ps.executeQuery();
			return beanLoader.loadList(rs);
		} catch (SQLException e) {
			e.printStackTrace();
			throw e;
		} finally {
			DBUtil.closeConnection(conn, ps);
		}
	}
	
}
