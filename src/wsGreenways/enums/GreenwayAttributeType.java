package wsGreenways.enums;

public enum GreenwayAttributeType {

	LENGTH("Length"),
	ENDPOINTS("End points"),
	SURFACE("Surface"),
	TERRAIN("Terrain"),
	NAVIGATION("Navigation"),
	PARKING("Parking"),
	AMENITIES("Amenities"),
	NEARBYAMENITIES("Nearby amenities"),
	CONNECTIONS("Connects to");
	
	private String name;
	
	GreenwayAttributeType(String name) {
		this.name = name;
	}
	
	public String getName() {
		return name;
	}
	
}
