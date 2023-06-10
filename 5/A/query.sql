SELECT
    CASE
        WHEN g.grade >= 8 THEN s.name
        ELSE 'low'
        END AS name,
    g.grade,
    s.marks
FROM students s
         JOIN grade g ON s.marks >= g.min_mark AND s.marks <= g.max_mark
ORDER BY
    g.grade DESC,
    CASE
        WHEN g.grade >= 8 THEN g.grade
        ELSE s.marks
        END DESC,
    CASE
        WHEN g.grade >= 8 THEN s.name
        END ASC,
    CASE
        WHEN g.grade < 8 THEN s.marks
        END ASC;
