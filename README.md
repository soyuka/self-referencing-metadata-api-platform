
Errors come from phpDocumentor:
- can't read `@var self` properly, ends up `elf`, workaround: use `@var FQDN`
- can't resolve traits properties properly, workaround: use `FQDN` in trait properties

Repro here:

```
bin/console -vvv api:json-schema:generate 'App\Entity\Dummy'
```

`mv src/Entity/Dummy.bak src/Entity/Dummy.php` for a non-working example
