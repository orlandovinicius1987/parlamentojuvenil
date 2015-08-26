<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Inscrições</th>
            <th>Municípios inscritos</th>
            <th>Municípios não-inscritos</th>
            <th>Canceladas/Duplicadas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>@{{ total }}</td>
            <td>@{{ citiesIn }}</td>
            <td>@{{ citiesOut }}</td>
            <td>@{{ cancelled }}</td>
        </tr>
    </tbody>
</table>
