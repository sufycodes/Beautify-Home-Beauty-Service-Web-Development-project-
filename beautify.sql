-- ==================================================
-- Beautify - Home Beauty Services
-- Database File
-- ==================================================

-- Create and select the database
CREATE DATABASE IF NOT EXISTS beautify;
USE beautify;

-- --------------------------------------------------
-- Table: clients
-- Stores all registered client information
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS clients (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    full_name  VARCHAR(100) NOT NULL,
    dob        DATE NOT NULL,
    cnic       VARCHAR(20) NOT NULL,
    contact    VARCHAR(20) NOT NULL,
    address    TEXT NOT NULL,
    email      VARCHAR(100) NOT NULL,
    username   VARCHAR(50) NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
