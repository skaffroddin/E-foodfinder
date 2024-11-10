

# eFoodFinder Database Schema


---

## Database Schema

The schema includes two tables:

- **Restaurants**: Stores details about each restaurant, including name, address, and geolocation data (latitude and longitude).
- **Menu Items**: Stores information about each menu item available at each restaurant.

---

## Table Structures and Relationships

### Restaurants Table

| Column       | Type             | Description                                      |
|--------------|------------------|--------------------------------------------------|
| `id`         | `BIGINT` (PK)    | Unique identifier for the restaurant             |
| `name`       | `VARCHAR(255)`   | Name of the restaurant                           |
| `address`    | `VARCHAR(255)`   | Full address of the restaurant                   |
| `latitude`   | `DECIMAL(10, 8)` | Latitude of the restaurant                       |
| `longitude`  | `DECIMAL(11, 8)` | Longitude of the restaurant                      |
| `rating`     | `FLOAT`          | Average rating (optional, for user feedback)     |
| `created_at` | `TIMESTAMP`      | Timestamp when the entry was created             |
| `updated_at` | `TIMESTAMP`      | Timestamp when the entry was last updated        |

**Primary Key**: `id`  
**Indexes**: Index on `latitude` and `longitude` for optimized geolocation queries.

---

### Menu Items Table

| Column          | Type              | Description                                      |
|-----------------|-------------------|--------------------------------------------------|
| `id`            | `BIGINT` (PK)     | Unique identifier for the menu item              |
| `restaurant_id` | `BIGINT` (FK)     | Foreign key referencing `id` in **Restaurants**  |
| `name`          | `VARCHAR(255)`    | Name of the menu item (e.g., "Chilli Chicken")   |
| `price`         | `DECIMAL(8, 2)`   | Price of the menu item                           |
| `description`   | `TEXT`            | Description of the menu item                     |
| `category`      | `VARCHAR(50)`     | Category of the item (e.g., "Appetizer")         |
| `created_at`    | `TIMESTAMP`       | Timestamp when the entry was created             |
| `updated_at`    | `TIMESTAMP`       | Timestamp when the entry was last updated        |

**Primary Key**: `id`  
**Foreign Key**: `restaurant_id` references `id` in **Restaurants**  
**Indexes**: Index on `restaurant_id` for optimized lookup of menu items by restaurant.

---

## ER Diagram

The following ASCII ER diagram shows the relationship between the **Restaurants** and **Menu Items** tables:


+----------------+        1        +----------------+
|   RESTAURANTS  |---------------->|   MENU ITEMS   |
+----------------+                 +----------------+
| id (PK)        |                 | id (PK)        |
| name           |                 | restaurant_id  |
| address        |                 | name           |
| latitude       |                 | price          |
| longitude      |                 | description    |
| rating         |                 | category       |
| created_at     |                 | created_at     |
| updated_at     |                 | updated_at     |
+----------------+                 +----------------+
```

