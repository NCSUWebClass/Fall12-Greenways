package wsGreenways;

import wsGreenways.enums.GreenwayAttributeType;

public class GreenwayAttribute {
	
	private GreenwayAttributeType type;
	private String value;
	
	public GreenwayAttribute(GreenwayAttributeType type, String value) {
		this.type = type;
		this.value = value;
	}

	public GreenwayAttributeType getType() {
		return type;
	}

	public String getValue() {
		return value;
	}

}
