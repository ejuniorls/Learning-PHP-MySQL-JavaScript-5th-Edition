USE publications;

DROP TABLE IF EXISTS classics;

CREATE TABLE IF NOT EXISTS classics (
    author VARCHAR(128),
    title VARCHAR(128),
    category VARCHAR(16),
    year SMALLINT,
    isbn CHAR(13),
    INDEX(author(20)),
    INDEX(title(20)),
    INDEX(category(4)),
    INDEX(year),
    PRIMARY KEY (isbn)
) ENGINE InnoDB;