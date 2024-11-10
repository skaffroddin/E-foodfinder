# E-foodfinder - Form Documentation

## 1. User Registration Form

### Form Fields

| Field              | Type        | Validation Requirements                              | Description                                                                   |
|--------------------|-------------|------------------------------------------------------|-------------------------------------------------------------------------------|
| `name`             | Text        | Required                                             | User's full name.                                                              |
| `email`            | Email       | Required, Must be a valid email, Unique               | User's email address (to be verified via OTP).                                 |
| `password`         | Password    | Required, Minimum length 8 characters                 | Account password.                                                              |
| `confirm_password` | Password    | Required, Must match `password`                       | Confirmation of the user's password.                                           |
| `date_of_birth`    | Date        | Required                                             | User's date of birth.                                                          |
| `profile_photo`    | File        | Optional                                             | User's optional profile picture.                                               |
| `phone_number`     | Tel         | Required, Valid phone number format                  | User's phone number.                                                           |
| `state`            | Text        | Required                                             | State of residence.                                                            |
| `country`          | Text        | Required                                             | Country of residence.                                                          |
| `gender`           | Select      | Required, Male/Female/Other                           | Gender selection (Male/Female/Other).                                          |

### Functionality:
- **Name**: A required field that captures the user's full name.
- **Email**: Required for account creation and used for verification via OTP.
- **Password**: Required and must be at least 8 characters. It will be stored securely after hashing.
- **Confirm Password**: Confirms the password and must match the `password` field.
- **Date of Birth**: Captures the user's date of birth. It is required for age verification.
- **Profile Photo**: Optional field for the user to upload a profile photo.
- **Phone Number**: A required field that captures the user's phone number. It needs to follow the correct phone number format.
- **State and Country**: Required fields that capture the user's residential state and country.
- **Gender**: A dropdown select field to capture the user's gender (Male, Female, or Other).

### Validation:
- The `email` field must be a valid email and unique in the system.
- The `password` field must contain at least 8 characters.
- The `confirm_password` must match the `password`.
- The `phone_number`, `state`, `country`, and `gender` fields must be valid and properly formatted.

---

## 2. User Login Form

### Form Fields

| Field             | Type        | Validation Requirements                              | Description                                                                   |
|-------------------|-------------|------------------------------------------------------|-------------------------------------------------------------------------------|
| `email`           | Email       | Required, Must be a valid email                       | User's registered email address.                                               |
| `password`        | Password    | Required                                             | User's account password.                                                      |
| `remember_me`     | Checkbox    | Optional                                             | Option to remember the user for future logins.                                |

### Functionality:
- **Email**: The user provides their registered email address.
- **Password**: The user enters their password associated with the account.
- **Remember Me**: Option to keep the user logged in for future sessions.

### Validation:
- The `email` field must be valid and exist in the database.
- The `password` field must match the password stored for that email in the database.

---




# E-foodfinder - Search Form (Home Page Search)

## 1. Search Form Overview

The **Search Form** on the homepage allows users to search for food dishes or restaurants with a focus on real-time suggestions, filters, and AJAX-enabled search results.

### Features:
- **Search Bar**: Lets users enter queries like "chili chicken" or a restaurant name.
- **Real-time Suggestions**: Displays relevant suggestions as the user types.
- **AJAX Search**: Enables results to load without page refresh.
- **Results Visibility**: Shows only the top 3-4 results for unauthenticated users, with additional results blurred until login.
- **Filter Options**: Users can filter search results by criteria such as price, restaurant type, popularity, and rating.

---

## 2. Form Fields

The search form includes the following input fields for user queries:

| Field Name         | Type        | Description                                                               | Validation                |
|--------------------|-------------|---------------------------------------------------------------------------|---------------------------|
| `search_query`     | Text        | A text input field where users type their search query (e.g., dish or restaurant). | Required, Minimum 3 characters |

### Search Functionality:
- **Search Input**: Users can search by typing a dish, restaurant, or keyword.
- **Search Button**: Submits the query, though AJAX dynamically initiates the search as the user types.
- **Search Suggestions**: Relevant suggestions are shown in a dropdown menu.
- **Filter Options**: After the user enters a search query, filters appear for refining results by criteria like price, restaurant type, popularity, and rating.

---

## 3. Results Display

- **For Unauthenticated Users**: 
  - Shows only the first 3-4 results, with additional results blurred and a prompt to log in.
- **For Authenticated Users**: 
  - Allows full access to all results.
- **Results Layout**: Each result is displayed in a card format that includes:
  - Dish or Restaurant Name
  - Price (if applicable)
  - Short description or details
  - View more button (optional)

---

## 4. Workflow of the Search Form

1. **User Input**: The user types a query (e.g., "chili chicken") into the search bar.
2. **AJAX Request**: An AJAX request fetches results dynamically as the user types.
3. **Real-time Suggestions**: Relevant suggestions display based on the search query.
4. **Search Results**: The top 3-4 search results appear below the search bar.
5. **Filter Options**: Filters like price, type, and rating appear after submitting the search.
6. **Results Access**: Unauthenticated users see limited, blurred results; authenticated users view all results.
7. **Card Display**: Results display in card format with essential details such as the name, price, and a "View More" option.

---

## 5. Expected Behavior

- **For Unauthenticated Users**:
  - Displays only the top 3-4 results with a prompt to log in or register to view additional results.
  - Blurs extra results until login.
  
- **For Authenticated Users**:
  - Provides unrestricted access to all search results.
  
---

## 6. UI/UX Features

- **Responsive Design**: Ensures search form and results adapt well to all screen sizes.
- **Search Suggestions Dropdown**: Shows a dropdown of suggestions as the user types.
- **Filter Options**: Filters like price, restaurant type, popularity, and rating help users refine results after the initial search.
- **Results Cards**: Results are displayed in cards, offering a clean and readable layout with essential details.
- **Minimalistic and Clean Design**: Aims for simplicity and ease of navigation.

---

This documentation provides a complete overview of the **Search Form** feature on the homepage, detailing user input fields, functionality, filter options, and the display of results for both authenticated and unauthenticated users.
