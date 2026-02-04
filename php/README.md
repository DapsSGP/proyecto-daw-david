## Autenticación mediante LDAP

La aplicación permite autenticar a los usuarios utilizando el
directorio LDAP configurado en la empresa DevWebPro.

Cada usuario introduce su nombre de usuario (`uid`) y contraseña.
La aplicación realiza un `bind` contra el servidor LDAP usando
las credenciales del usuario.

Ejemplo conceptual en PHP:

```php
$ldap = new LDAPConnection();

if ($ldap->autenticar("david", "passwordSeguro")) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Credenciales incorrectas";
}