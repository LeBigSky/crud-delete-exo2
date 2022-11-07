<section>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tous">
        Tous nos modèles
      </button>
    
      <div class="modal fade" id="tous" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tous nos véhicules</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Marque</th>
                          <th scope="col">Année</th>
                          <th scope="col">Couleur</th>
                          <th scope="col">Prix</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cars as $car )
                        <tr>
                          <td>{{ $car['marque'] }}</td>
                          <td>{{ $car['année'] }}</td>
                          <td>{{ $car['couleur'] }}</td>
                          <td>{{ $car['prix'] }}€</td>
                          <td class="d-flex justify-content-end">
                            <form action="/delete/{{$car->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
            </div>
            <div class="modal-footer">
           
            </div>
          </div>
        </div>
      </div>

</section>