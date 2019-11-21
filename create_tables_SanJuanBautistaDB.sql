USE dbsanjuanbautista ;

-- -----------------------------------------------------
-- Table dbsanjuanbautista.users
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS users (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  image VARCHAR(255) NOT NULL, -- nombre del archivo de imagen de perfil
  created_at DATE NOT NULL,
  updated_at DATE
  );
  
  -- -----------------------------------------------------
-- Table dbsanjuanbautista.biography
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS biography (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  genre VARCHAR(1) NULL,
  birth_date DATETIME NULL,
  address VARCHAR(45) NULL,
  city VARCHAR(20) NULL,
  studies VARCHAR(1) NULL,
  degree VARCHAR(45) NULL,
  institution1 VARCHAR(1) NULL,
  institution2 VARCHAR(1) NULL,
  institution3 VARCHAR(1) NULL,
  institution4 VARCHAR(1) NULL,
  institution5 VARCHAR(1) NULL,
  institution6 VARCHAR(1) NULL,
  institution7 VARCHAR(1) NULL,
  institution8 VARCHAR(1) NULL,
  file_cv VARCHAR(255) NOT NULL, -- nombre del archivo del CV
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (id) REFERENCES users (id)
  );

-- -----------------------------------------------------
-- Table dbsanjuanbautista.post_type
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS post_type (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL
);

-- -----------------------------------------------------
-- Table dbsanjuanbautista.posts
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS posts (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  title VARCHAR(45) NOT NULL,
  short_desc VARCHAR(75) NOT NULL,
  long_desc VARCHAR(255) NULL,
  link VARCHAR(255) NULL,
  image VARCHAR(255) NULL,
  type_id INT NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users (id),
  FOREIGN KEY (type_id) REFERENCES post_type (id)
);


-- -----------------------------------------------------
-- Table dbsanjuanbautista.likes
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS dbsanjuanbautista.likes (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  post_id INT NOT NULL,
  user_id INT NOT NULL,
  created_at DATE NOT NULL,
  FOREIGN KEY (post_id) REFERENCES posts (id),
  FOREIGN KEY (user_id) REFERENCES users (id)
);