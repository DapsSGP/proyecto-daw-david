<?php
/**
 * Clase LDAPConnection
 *
 * Gestiona la conexión y autenticación de usuarios
 * contra un servidor LDAP corporativo.
 *
 * @package DevWebPro
 * @author David
 * @version 1.0
 */
class LDAPConnection {

    /**
     * Host del servidor LDAP
     * @var string
     */
    private string $host = "ldap://localhost";

    /**
     * DN base del directorio
     * @var string
     */
    private string $baseDn = "dc=devwebpro,dc=local";

    /**
     * Autentica un usuario contra LDAP
     *
     * @param string $usuario UID del usuario
     * @param string $password Contraseña del usuario
     * @return bool True si la autenticación es correcta
     */
    public function autenticar(string $usuario, string $password): bool {

        $ldap = ldap_connect($this->host);
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

        return @ldap_bind(
            $ldap,
            "uid=$usuario,ou=developers," . $this->baseDn,
            $password
        );
    }
}
