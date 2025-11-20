-- Database Setup SQL
-- Run this first to create your database structure

CREATE DATABASE IF NOT EXISTS dashboard_system;
USE dashboard_system;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- User submissions/forms table
CREATE TABLE user_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    form_type VARCHAR(50) NOT NULL,
    form_data TEXT NOT NULL,
    status VARCHAR(20) DEFAULT 'pending',
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- News/announcements table
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    category VARCHAR(50) DEFAULT 'general',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Analytics data table (for charts/graphs)
CREATE TABLE analytics_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_type VARCHAR(50) NOT NULL,
    value DECIMAL(10,2) NOT NULL,
    label VARCHAR(100) NOT NULL,
    recorded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample news data
INSERT INTO news (title, content, category) VALUES
('Welcome to Dashboard', 'Welcome to your new dashboard system. Explore all the features available to you.', 'general'),
('System Update', 'We have rolled out new features. Check them out in the sidebar!', 'update'),
('Important Notice', 'Please complete your profile information for better experience.', 'alert');

-- Insert sample analytics data
INSERT INTO analytics_data (data_type, value, label) VALUES
('sales', 1250.50, 'January'),
('sales', 1890.75, 'February'),
('sales', 2100.25, 'March'),
('sales', 1750.00, 'April'),
('sales', 2400.50, 'May'),
('sales', 2850.75, 'June'),
('users', 45, 'Active'),
('users', 12, 'Pending'),
('users', 8, 'Inactive');