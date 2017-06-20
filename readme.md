## Parlamento Juvenil da ALERJ

### Votes per hour

```
SELECT 
    to_timestamp(floor((extract('epoch' from created_at) / 3600 )) * 3600) AT TIME ZONE 'UTC' as hora,
    (select count(*) from votes) as votos_total,
    COUNT(*) votos_na_hora, 
    CAST(round((COUNT(*)  * 100.00) / (select count(*) from votes), 2) AS text) || '%' as percentual
FROM votes
GROUP BY hora
ORDER BY hora desc
;
```
