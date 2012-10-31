package wsGreenways.enums;

public enum GreenwayLocation {
	
	BETHABARA("Bethabara","http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b37703c0edefe45e7&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=36.153885,-80.301561&amp;spn=0.010395,0.012875&amp;z=15"),
	BOWENBRANCH("Bowen Branch","http://maps.google.com/"),
	GATEWAYCOMMONS("Gateway Commons","http://maps.google.com/"),
	MUDDYCREEK("Muddy Creek","http://maps.google.com/"),
	NEWELLMASSEY("Newell-Massey","http://maps.google.com/"),
	PEACHTREE("Peachtree","http://maps.google.com/"),
	SALEMLAKE("Salem Lake","http://maps.google.com/"),
	SALEMCREEK("Salem Creek","http://maps.google.com/"),
	SILASCREEK("Silas Creek","http://maps.google.com/"),
	STROLLWAY("Strollway","http://maps.google.com/");
	
	private String name;
	private String mapURL;

	GreenwayLocation(String name, String mapURL) {
		this.name = name;
		this.mapURL = mapURL;
	}

	public String getName() {
		return name;
	}
	
	public String getMapURL() {
		return mapURL;
	}

}
