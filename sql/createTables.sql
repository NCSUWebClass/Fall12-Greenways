CREATE TABLE Greenways(
	MID BIGINT unsigned NOT NULL,
	Name varchar(MAX),
	MapURL varchar(MAX),
	LengthInMiles FLOAT,
	LengthText varchar(MAX),
	EndPoints varchar(MAX),
	Surface varchar(MAX),
	Terrain varchar(MAX),
	Navigation varchar(MAX),
	Parking varchar(MAX),
	Amenities varchar(MAX),
	NearbyAmenities varchar(MAX),
	Connections varchar(MAX),
	Accessibility varchar(MAX)
	
	PRIMARY KEY (MID)
);