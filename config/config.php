<?php
// Start session at the very beginning
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// -------------------------------
// Database credentials
// -------------------------------
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'my_mpp');

// -------------------------------
// Super Admin Credentials
// -------------------------------
define('SUPERADMIN_USERNAME', 'admin');
define('SUPERADMIN_PASSWORD', '1234');
define('SUPERADMIN_EMAIL', 'superadmin@system.com');
define('SUPERADMIN_ROLE', 'superadmin');

// -------------------------------
// Create database connection
// -------------------------------
try {
    $conn = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // If database connection fails, we can still use superadmin
    $conn = null;
    error_log("Database connection failed: " . $e->getMessage());
}

// -------------------------------
// Session & Login Functions
// -------------------------------

// ✅ Check if user is logged in
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// ✅ Redirect to login page if user not logged in
function requireLogin()
{
    if (!isLoggedIn()) {
        header("Location: index.php");
        exit();
    }
}

// ✅ Redirect to appropriate dashboard based on role
function redirectIfLoggedIn()
{
    if (isLoggedIn() && isset($_SESSION['role'])) {
        $current_page = basename($_SERVER['PHP_SELF']);

        // Don't redirect if we're already on the correct page
        switch ($_SESSION['role']) {
            case 'superadmin':
                if ($current_page !== 'superadmin.php') {
                    header("Location: superadmin.php");
                    exit();
                }
                break;
            case 'Admin':
                if ($current_page !== 'adminpage.php') {
                    header("Location: adminpage.php");
                    exit();
                }
                break;
            case 'MPP':
                if ($current_page !== 'mpp_dashboard.php') {
                    header("Location: mpp_dashboard.php");
                    exit();
                }
                break;
            default:
                if ($current_page !== 'homepage.php') {
                    header("Location: homepage.php");
                    exit();
                }
        }
    }
}

// ✅ Check if user has specific role
function requireRole($role)
{
    if (!isLoggedIn() || $_SESSION['role'] !== $role) {
        header("Location: index.php");
        exit();
    }
}

// ✅ Check if user is Super Admin
function isSuperAdmin()
{
    return isLoggedIn() && isset($_SESSION['role']) && $_SESSION['role'] === 'superadmin';
}

// ✅ Require Super Admin role
function requireSuperAdmin()
{
    if (!isSuperAdmin()) {
        header("Location: index.php");
        exit();
    }
}
