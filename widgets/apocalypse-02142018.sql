#apocalypse-02142018.sql

drop table if exists VinylAlbums;
CREATE TABLE `VinylAlbums` ( 
    `AlbumID` int(10) unsigned NOT NULL AUTO_INCREMENT, 
    `Musician` varchar(50) DEFAULT NULL, 
    `AlbumName` varchar(50) DEFAULT NULL, 
    `Features` text DEFAULT NULL,
    `Year` datetime,  
    `Price` int(10), 
    PRIMARY KEY (`AlbumID`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


