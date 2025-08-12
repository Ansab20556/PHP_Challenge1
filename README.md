# PHP_Challenge1
Important
In your code, add comments next to each use of POST or GET, explaining why POST combined with proper redirects is generally preferred in such cases.
Push your completed code to a GitHub repository and share the link.
Each part of the task must be committed separately with a clear commit message describing what you did.
Upload each main feature or requirement in a separate branch (e.g., feature/server-time, feature/form-post, feature/result-page, etc.).


GitHub Requirements (Branches, Commit Messages, Repository Setup): 50 marks
Functionality & Code Quality: 50 marks (server time, POST form, redirect, result page, GET page, PSR-12 compliance, comments).

Q1: Practical PHP Application
Create a simple PHP web application that demonstrates the following:
Backend Features
Display Current Server Time using PHP.
Create a Form with POST method that takes:
User’s name
Favorite color
When submitted, redirect the user to a result page using the PHP header("Location: ...") method with the appropriate HTTP status code as explained in the lecture.
On the result page, display:
A greeting with the user’s name.
The favorite color styled as text in that color.
Follow PSR-12 coding standards in your PHP code.
Extra Requirement
Add a second page that accepts a GET parameter (name) and displays:
"Hello, {name}" or "Hello, Guest" if no name is given.
