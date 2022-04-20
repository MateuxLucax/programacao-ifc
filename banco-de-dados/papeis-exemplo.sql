CREATE ROLE 'administrador', 'desenvolvedor';

SHOW GRANTS FOR 'administrador';

DROP ROLE 'desenvolvedor';

GRANT ALL
ON *.*
TO administrador;

GRANT administrador
TO mateux@localhost;

REVOKE ALL
FROM administrador;

REVOKE administrador
FROM usuario@localhost;

CREATE ROLE 'administrador', 'desenvolvedor', 'analista', 'designer';

GRANT ALL
ON *.*
TO administrador;

GRANT ALL
ON *.*
TO administrador;