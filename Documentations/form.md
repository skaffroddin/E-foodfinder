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
