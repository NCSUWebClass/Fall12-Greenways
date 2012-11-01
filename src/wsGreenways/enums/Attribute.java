/**
 * 
 */
package wsGreenways.enums;

/**
 * @author amfelshe
 *
 */
public enum Attribute {
	
	MID("MID", AttributeType.LONG, "MID"),
	STARTDATE("Start date", AttributeType.DATE, "StartDate"),
	STARTTIME("Start time", AttributeType.TIME, "StartTime"),
	ENDDATE("End date", AttributeType.DATE, "EndDate"),
	ENDTIME("End time", AttributeType.TIME, "EndTime"),
	EVENTINTERVAL("Interval time", AttributeType.INT, "EventInterval"),
	LOCATION("Location", AttributeType.STRING, "Location"),
	DESCRIPTION("Description", AttributeType.STRING, "Description"),
	NAME("Name", AttributeType.STRING, "Name"),
	MAPURL("MapURL", AttributeType.STRING, "MapURL"),
	LENGTHINMILES("Length (in miles)", AttributeType.FLOAT, "LengthInMiles"),
	LENGTHTEXT("Length", AttributeType.STRING, "LengthText"),
	ENDPOINTS("End points", AttributeType.STRING, "EndPoints"),
	SURFACE("Surface", AttributeType.STRING, "Surface"),
	TERRAIN("Terrain", AttributeType.STRING, "Terrain"),
	NAVIGATION("Navigation", AttributeType.STRING, "Navigation"),
	PARKING("Parking", AttributeType.STRING, "Parking"),
	AMENITIES("Amenities", AttributeType.STRING, "Amenities"),
	NEARBYAMENITIES("Nearby amenities", AttributeType.STRING, "NearbyAmenities"),
	CONNECTIONS("Connects to", AttributeType.STRING, "Connections"),
	ACCESSIBILITY("Accessibility", AttributeType.STRING, "Accessibility");
	
	private String name;
	private String sqlHeader;
	private AttributeType type;
	
	Attribute(String name, AttributeType type, String sqlHeader) {
		this.name = name;
		this.type = type;
		this.sqlHeader = sqlHeader;
	}

	public String getName() {
		return name;
	}

	public String getSqlHeader() {
		return sqlHeader;
	}

	public AttributeType getType() {
		return type;
	}

}
