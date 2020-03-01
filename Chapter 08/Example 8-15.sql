USE publications;

ALTER TABLE classics ADD FULLTEXT(author,title);