/**
 * 
 */
package wsGreenways;

import java.sql.Date;
import java.sql.Time;
import java.util.HashMap;
import java.util.LinkedList;
import wsGreenways.enums.Attribute;
import wsGreenways.enums.Table;
import wsGreenways.exceptions.WSGInvalidAttributeException;

/**
 * @author amfelshe
 *
 */
public class Bean {
	
	protected HashMap<Attribute, Object> attributes = new HashMap<Attribute, Object>();
	protected LinkedList<Attribute> validAttributes = new LinkedList<Attribute>();
	
	public Bean(Table t) {
		validAttributes.add(Attribute.MID);
		
		switch(t) {
		case EVENT:
			validAttributes.add(Attribute.STARTDATE);
			validAttributes.add(Attribute.STARTTIME);
			validAttributes.add(Attribute.ENDDATE);
			validAttributes.add(Attribute.ENDTIME);
			validAttributes.add(Attribute.EVENTINTERVAL);
			validAttributes.add(Attribute.LOCATION);
			validAttributes.add(Attribute.DESCRIPTION);
			break;
		case GREENWAY:
			validAttributes.add(Attribute.NAME);
			validAttributes.add(Attribute.MAPURL);
			validAttributes.add(Attribute.LENGTHINMILES);
			validAttributes.add(Attribute.LENGTHTEXT);
			validAttributes.add(Attribute.ENDPOINTS);
			validAttributes.add(Attribute.SURFACE);
			validAttributes.add(Attribute.TERRAIN);
			validAttributes.add(Attribute.NAVIGATION);
			validAttributes.add(Attribute.PARKING);
			validAttributes.add(Attribute.AMENITIES);
			validAttributes.add(Attribute.NEARBYAMENITIES);
			validAttributes.add(Attribute.CONNECTIONS);
			validAttributes.add(Attribute.ACCESSIBILITY);
			break;
		default:
			break;
		}
	}
	
	public Object getAttribute(Attribute attributeType) throws WSGInvalidAttributeException {
		
		checkValid(attributeType);
		
		return attributes.get(attributeType);
		
	}
	
	public Object setAttribute(Attribute attributeType, Object value) throws WSGInvalidAttributeException {
		
		checkValid(attributeType);
		
		return attributes.put(attributeType, value);
		
	}
	
	public Float getAttributeFloat(Attribute attributeType) throws WSGInvalidAttributeException {
		
		return (Float) getAttribute(attributeType);
		
	}
	
	public Long getAttributeLong(Attribute attributeType) throws WSGInvalidAttributeException {
		
		return (Long) getAttribute(attributeType);
		
	}
	
	public String getAttributeString(Attribute attributeType) throws WSGInvalidAttributeException {
		
		return (String) getAttribute(attributeType);
		
	}
	
	public Integer getAttributeInt(Attribute attributeType) throws WSGInvalidAttributeException {
		
		return (Integer) getAttribute(attributeType);
		
	}

	public Date getAttributeDate(Attribute a) throws WSGInvalidAttributeException {
		
		return (Date) getAttribute(a);
		
	}

	public Time getAttributeTime(Attribute a) throws WSGInvalidAttributeException {
		
		return (Time) getAttribute(a);
		
	}
	
	public void checkValid(Attribute attributeType) throws WSGInvalidAttributeException {

		if(!validAttributes.contains(attributeType)) {
			
			throw new WSGInvalidAttributeException(String.format("Invalid attribute %s.", attributeType.getName()));
			
		}
		
	}

	public LinkedList<Attribute> getValidAttributes() {
		
		return validAttributes;
		
	}
	
	public HashMap<Attribute, Object> getAttributes() {
		
		return attributes;
		
	}

}
