<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">Inscrições válidas</th>
            <th class="text-center">Municípios inscritos</th>
            <th class="text-center">Municípios não-inscritos</th>
            <th class="text-center">Canceladas/Duplicadas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">@{{ total }}</td>
            <td class="text-center">@{{ citiesIn }}</td>
            <td class="text-center">@{{ citiesOut }}</td>
            <td class="text-center">@{{ cancelled }}</td>
        </tr>
    </tbody>
</table>
