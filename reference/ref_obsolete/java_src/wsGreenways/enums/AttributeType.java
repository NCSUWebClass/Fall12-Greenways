/**
 * 
 */
package wsGreenways.enums;

import java.sql.Date;
import java.sql.Time;

/**
 * @author amfelshe
 *
 */
public enum AttributeType {
	
	LONG("Long", Long.class),
	DATE("Date", Date.class),
	TIME("Time", Time.class),
	STRING("String", String.class),
	FLOAT("Float", Float.class),
	INT("Int", Integer.class);
	
	private String name;
	private Class<?> type;
	
	AttributeType(String name, Class<?> type) {
		this.name = name;
		this.type = type;
	}

	public String getName() {
		return name;
	}

	public Class<?> getType() {
		return type;
	}

}
