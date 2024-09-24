# Local Authority

- Category: Web Exploitation
- Difficulty level: Easy

### Introduction
We are provided with a website that has a Username & Password field.
![](Images/asdf0.png)

### Approach
I inspected the source code where I found a login.php file.
![](Images/asdf1.png)
The login.php file had an admin.php file and a hash value which I will use later if there are no leads.
![](Images/asdf2.png)
![](Images/asdf3.png)
The admin.php had both the administrator username and password, allowing us access into the website.
![](Images/asdf4.png)
Logging into the website gives us the flag.
![](Images/asdf5.png)

### Learning Outcomes
- This exploitation was possible only because the website verified users via a code on the client side.
- An unsafe way of verifying users will compromise the confidentiality of the website and may escalate into integrity & availability issues if the account has necessary privileges.
