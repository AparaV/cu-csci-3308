SELECT statecode, name FROM states;
SELECT * FROM counties WHERE name LIKE "%Prince%";
SELECT population_2010 FROM states WHERE statecode=
	(SELECT statecode FROM senators WHERE name="Richard Lugar");
SELECT COUNT(*) FROM counties WHERE statecode=
	(SELECT statecode FROM states WHERE name="Maryland");
SELECT name FROM states ORDER BY admitted_to_union DESC LIMIT 1;
SELECT NAME FROM senators WHERE affiliation="D" AND name NOT IN (SELECT chairman FROM committees);
