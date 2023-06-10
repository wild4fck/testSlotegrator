SELECT
    CASE
        WHEN grade >= 8 THEN students.name
        ELSE 'low'
        END AS name,
    grade,
    students.marks AS mark
FROM
    students
        JOIN
    grade ON students.marks >= grade.min_mark AND students.marks <= grade.max_mark
ORDER BY
    grade DESC,
    CASE
        WHEN grade >= 8 THEN students.name
        END ASC,
    CASE
        WHEN grade < 8 THEN students.marks
        END ASC;
