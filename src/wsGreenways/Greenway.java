package wsGreenways;

import java.util.LinkedList;

import wsGreenways.enums.GreenwayAttributeType;
import wsGreenways.enums.GreenwayLocation;
import wsGreenways.exceptions.WSGInvalidGreenwayException;

public class Greenway {
	
	private GreenwayLocation location;
	private LinkedList<GreenwayAttribute> attributes;
	private String accessibility;
	
	public Greenway(GreenwayLocation location) throws WSGInvalidGreenwayException {
		this.location = location;
		
		attributes = new LinkedList<GreenwayAttribute>();
		switch(location) {
		case BETHABARA:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, "2.7 miles, part of a 9-mile network of woodland trails and wetland boardwalks through Historic Bethabara Park (HBP)."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, "Crowne Oaks Apartments to Reynolda Commons Shopping Center."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, "Paved between Old Town Road and Old Town Drive, and from Midkiff Road to Reynolda Road; otherwise, a variety of unpaved surfaces."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, "Paved sections are flat."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, "Bethabara Greenway is bisected by Old Town Drive. Pedestrians and cyclists should use extreme caution when crossing. There are blind curves in both directions, and currently no crosswalk or sidewalk. The City of Winston-Salem does have plans to upgrade this dangerous intersection."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, "Paved and gravel lots at HBP Visitor Center; unmarked gravel lots on Old Town Drive; unmarked on-street parking at the end of Midkiff Road and at the end of Indiana Avenue Ext.; unmarked paved parking at Reynolda Commons Shopping Center (from there greenway access is down a set of wooden steps on Reynolda Road)."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, "Benches, trash cans, bulletin boards, nature and historical interpretive signage."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, "At HBP Visitor Center (open 10:30-4:30 Tue.-Fri., 1:30-4:30 Sat. and Sun.): restrooms, water fountain, maps of trails. At Bethabara City Park (parking off Old Town Drive): portable toilet, playground, parcourse and picnic area with grill."));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, "One paved section of the Bethabara Greenway runs behind HBP's restored 18th century church and potter's house, archaeological ruins, reconstructed palisade fort and gardens. Reynolds Commons Shopping Center, at the Reynolda Road end of the greenway, offers a grocery, pharmacy, restaurants and other businesses."));
			accessibility = "The stretch of paved greenway along Mill Creek is not easy to find. An accessible entrance is at the end of Midkiff Rd. (off Reynolda Road, past Old Town Drive), where you can park on the street. There is a bit of hill and some rough ground around the barricade, but after that it's smooth going.";
			break;
		case BOWENBRANCH:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case GATEWAYCOMMONS:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case MUDDYCREEK:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case NEWELLMASSEY:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case PEACHTREE:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case SALEMCREEK:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case SALEMLAKE:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case SILASCREEK:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		case STROLLWAY:
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.LENGTH, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.ENDPOINTS, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.SURFACE, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.TERRAIN, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NAVIGATION, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.PARKING, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.AMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.NEARBYAMENITIES, ""));
			attributes.add(new GreenwayAttribute(GreenwayAttributeType.CONNECTIONS, ""));
			break;
		default:
			throw new WSGInvalidGreenwayException(String.format("Invalid greenway %d.", location));
		}
	}

	public String getAccessibility() {
		return accessibility;
	}
	
	public GreenwayLocation getLocation() {
		return location;
	}

	public LinkedList<GreenwayAttribute> getAttributes() {
		return attributes;
	}

}
