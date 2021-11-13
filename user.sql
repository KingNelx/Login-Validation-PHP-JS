CREATE table user(
	email VARCHAR (200),
    password VARCHAR (200)
);

INSERT INTO user (email, password) VALUES('jonel@gmail.com', 'abcde');

SELECT * FROM user;
DROP TABLE user
