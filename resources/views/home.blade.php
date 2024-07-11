<x-app-layout>

    <h1 class="text-center">Datos de la API</h1>
    <div class="container">
        <table class="table table-striped table-xl table-bordered table-hover table-responsive-xxls">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                    <!-- Agrega más columnas según tus datos -->
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato['id'] }}</td>
                        <td>{{ $dato['code'] }}</td>
                        <td>{{ $dato['amount'] }}</td>
                        <td>{{ substr($dato['date'], 0, 10) }}</td>
                        <td>
                            <form action="{{ route('registros.edit', $dato['id']) }}" method="GET">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </td>
                        <!-- Agrega más celdas según tus datos -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{-- <x-table></x-table> --}}
    
</x-app-layout>