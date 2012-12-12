/**
 * 
 */
package wsGreenways.enums;

/**
 * @author amfelshe
 *
 */
public enum Table {
	
	EVENT("Event", "Events"),
	GREENWAY("Greenway", "Greenways");
	
	private String name;
	private String sqlTable;
	
	Table(String name, String sqlTable) {
		this.name = name;
		this.sqlTable = sqlTable;
	}
	
	public String getName() {
		return name;
	}

	public String getSqlTable() {
		return sqlTable;
	}

}
