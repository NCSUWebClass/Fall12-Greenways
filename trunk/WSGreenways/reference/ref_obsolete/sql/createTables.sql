CREATE TABLE Greenways(
	MID BIGINT unsigned NOT NULL,
	Name varchar(1500) NOT NULL,
	MapURL varchar(1500) NOT NULL,
	LengthInMiles FLOAT NOT NULL,
	LengthText varchar(1500),
	EndPoints varchar(1500),
	Surface varchar(1500),
	Terrain varchar(1500),
	Navigation varchar(1500),
	Parking varchar(1500),
	Amenities varchar(1500),
	NearbyAmenities varchar(1500),
	Connections varchar(1500),
	Accessibility varchar(1500),
	
	PRIMARY KEY (MID)
);

CREATE TABLE Events(
	MID BIGINT unsigned NOT NULL,
	StartDate DATE NOT NULL,
	StartTime TIME,
	EndDate DATE,
	EndTime TIME,
	EventInterval INT,
	Location varchar(255) NOT NULL,
	Description varchar(1500) NOT NULL,
	
	PRIMARY KEY (MID)
);