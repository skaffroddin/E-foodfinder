

Database Schema
The schema will have two main tables:

Restaurants – stores details about each restaurant, including location data (latitude and longitude).
Menu Items – stores details about each menu item available at each restaurant.
Table Structures and Relationships
Here’s how the tables might look:

1. Restaurants Table
Column	Type	Description
id	BIGINT (PK)	Unique identifier for the restaurant
name	VARCHAR(255)	Name of the restaurant
address	VARCHAR(255)	Full address of the restaurant
latitude	DECIMAL(10, 8)	Latitude of the restaurant
longitude	DECIMAL(11, 8)	Longitude of the restaurant
rating	FLOAT	Average rating (optional, for user feedback)
created_at	TIMESTAMP	Timestamp when the entry was created
updated_at	TIMESTAMP	Timestamp when the entry was last updated
Primary Key: id
Indexes: Index on latitude and longitude for geolocation queries.



2. Menu Items Table
Column	Type	Description
id	BIGINT (PK)	Unique identifier for the menu item
restaurant_id	BIGINT (FK)	Foreign key referencing id in the restaurants table
name	VARCHAR(255)	Name of the menu item (e.g., "Chilli Chicken")
price	DECIMAL(8, 2)	Price of the menu item
description	TEXT	Description of the item
category	VARCHAR(50)	Category (e.g., "Appetizer", "Main Course")
created_at	TIMESTAMP	Timestamp when the entry was created
updated_at	TIMESTAMP	Timestamp when the entry was last updated
Primary Key: id
Foreign Key: restaurant_id references id in restaurants
Indexes: restaurant_id for optimized lookup of menu items by restaurant.
