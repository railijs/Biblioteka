CREATE DATABASE biblioteka;
USE biblioteka;
SELECT * FROM books;
SELECT * FROM users;

CREATE TABLE books (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  published DATE NOT NULL,
  available INT
); 


CREATE TABLE users(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  book_id INT NOT NULL,
  FOREIGN KEY (book_id) REFERENCES books(id),
  borrowed_date DATE NOT NULL,
  return_date DATE
);
 

INSERT INTO books
  (name, author, published, available)
VALUES
  ("Matisa piedzivojumi", "Railijs Didzis Grieznis", '2024-03-20', 1);