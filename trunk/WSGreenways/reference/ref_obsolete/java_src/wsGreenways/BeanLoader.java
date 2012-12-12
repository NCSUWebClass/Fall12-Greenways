package wsGreenways;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import wsGreenways.enums.Attribute;
import wsGreenways.enums.AttributeType;
import wsGreenways.enums.Table;
import wsGreenways.exceptions.WSGInvalidAttributeException;
import wsGreenways.exceptions.WSGUnsupportedAttributeTypeException;

public class BeanLoader {
	
	private Table table;
	
	public BeanLoader(Table table) {
		
		this.table = table;
		
	}

	public List<Bean> loadList(ResultSet rs) throws SQLException, WSGInvalidAttributeException, WSGUnsupportedAttributeTypeException {
		
		List<Bean> list = new ArrayList<Bean>();
		
		while (rs.next()) {
			list.add(loadSingle(rs));
		}
		
		return list;
		
	}
	
	public Bean loadSingle(ResultSet rs) throws SQLException, WSGInvalidAttributeException, WSGUnsupportedAttributeTypeException {
		
		Bean p = new Bean(table);
		
		loadCommon(rs, p);
		
		return p;
		
	}

	protected void loadCommon(ResultSet rs, Bean p) throws SQLException, WSGInvalidAttributeException, WSGUnsupportedAttributeTypeException{

		for(Attribute a : p.getValidAttributes()) {
			
			AttributeType type = a.getType();
			switch(type) {
			case LONG:
				p.setAttribute(a, rs.getLong(a.getSqlHeader()));
				break;
			case DATE:
				p.setAttribute(a, rs.getDate(a.getSqlHeader()));
				break;
			case TIME:
				p.setAttribute(a, rs.getTime(a.getSqlHeader()));
				break;
			case FLOAT:
				p.setAttribute(a, rs.getFloat(a.getSqlHeader()));
				break;
			case STRING:
				p.setAttribute(a, rs.getString(a.getSqlHeader()));
				break;
			case INT:
				p.setAttribute(a, rs.getInt(a.getSqlHeader()));
				break;
			default:
				throw new WSGUnsupportedAttributeTypeException(String.format("Unsupported attribute type %s.", a.getName()));
			}
			
		}
		
	}

	public PreparedStatement loadParameters(PreparedStatement ps, Bean p) throws SQLException, WSGInvalidAttributeException, WSGUnsupportedAttributeTypeException {
		
		int i = 1;
		
		for(Attribute a : p.getValidAttributes()) {
			
			AttributeType type = a.getType();
			switch(type) {
			case LONG:
				ps.setLong(i++, p.getAttributeLong(a));
				break;
			case DATE:
				ps.setDate(i++, p.getAttributeDate(a));
				break;
			case TIME:
				ps.setTime(i++, p.getAttributeTime(a));
				break;
			case FLOAT:
				ps.setFloat(i++, p.getAttributeFloat(a));
				break;
			case STRING:
				ps.setString(i++, p.getAttributeString(a));
				break;
			case INT:
				ps.setInt(i++, p.getAttributeInt(a));
				break;
			default:
				throw new WSGUnsupportedAttributeTypeException(String.format("Unsupported attribute type %s.", a.getName()));
			}
		}
		
		return ps;
		
	}
	
}
