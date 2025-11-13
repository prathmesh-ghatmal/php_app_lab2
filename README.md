
# PHP Application Migration Guide (Using GitHub Repository)

## 🎯 Objective
Deploy and migrate a simple PHP web application from **Windows (XAMPP)** to **Ubuntu (Apache + PHP)** using your **GitHub repository**.

---

## 🧩 Part 1 – Setup on Windows

### 1. Install XAMPP
- Download from [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)
- Open **XAMPP Control Panel** and start **Apache**.

### 2. Clone your GitHub repository
Open Command Prompt and run:
```bash
cd C:\xampp\htdocs
git clone https://github.com/prathmesh-ghatmal/php_app_lab2.git
````

(Replace `<your-username>` and `<your-repo-name>` with your actual GitHub repo details.)

This will create your project folder:

```
C:\xampp\htdocs\php_app_lab2
```

### 3. Run the app

1. Start **Apache** in XAMPP.
2. Open your browser and go to:

   ```
   http://localhost/php_app_lab2/
   ```
3. You’ll see your PHP app running.

📸 Take screenshots:

* Folder in `C:\xampp\htdocs\php_app_lab2`
* Apache running in XAMPP
* Browser showing your app

---

## 🐧 Part 2 – Migration to Ubuntu (VirtualBox)

### 1. Transfer using FileZilla

From **Windows → Ubuntu**:

* **Left (local):** `C:\xampp\htdocs\php_app_lab2`
* **Right (remote):** `/home/student/php_app_lab2`

📸 Take screenshot of this transfer in FileZilla.

---

### 2. Install Apache + PHP

In Ubuntu terminal:

```bash
sudo apt update
sudo apt install -y apache2 php libapache2-mod-php git
```

---

### 3. Clone your GitHub repo again on Ubuntu

```bash
cd /home/student
git clone https://github.com/<your-username>/<your-repo-name>.git php_app_lab2
```

---

### 4. Move your app into Apache’s web directory

```bash
sudo cp -r /home/student/php_app_lab2 /var/www/html/
sudo chmod -R 755 /var/www/html/php_app_lab2
```

---

### 5. Restart Apache

```bash
sudo systemctl restart apache2
```

---

### 6. Run the app

Open Firefox (inside Ubuntu) and go to:

```
http://localhost/php_app_lab2/
```

📸 Take screenshots:

* Terminal showing Apache & PHP installation
* Cloned repo in `/home/student/php_app_lab2`
* Browser showing the app running on Ubuntu

---

## 📄 Documentation Checklist

| Step                  | Screenshot |
| --------------------- | ---------- |
| Windows app running   | ✅          |
| FileZilla transfer    | ✅          |
| Ubuntu Apache setup   | ✅          |
| App running on Ubuntu | ✅          |

---

## 🧠 Summary

| Platform | Web Server           | Folder                         | URL                              |
| -------- | -------------------- | ------------------------------ | -------------------------------- |
| Windows  | XAMPP (Apache + PHP) | `C:\xampp\htdocs\php_app_lab2` | `http://localhost/php_app_lab2/` |
| Ubuntu   | Apache + PHP         | `/var/www/html/php_app_lab2`   | `http://localhost/php_app_lab2/` |

---

## 🔗 Notes

* Ensure `git` is installed on both systems (`git --version`).
* Use your own GitHub repository URL in clone commands.
* No need to re-upload files manually — Git keeps both environments synced easily.

```

