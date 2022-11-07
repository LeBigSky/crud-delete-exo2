<section>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#promo">
        Véhicules soldés
      </button>
      <!-- Modal -->
      <div class="modal fade modal-xl" id="promo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Véhicule en promo</h1>
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
                        <th scope="col">Reduction</th>
                        <th scope="col">Promo</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($cars as $vehicule )
                      @if ($vehicule['reduction'] > 0)
                      <tr>
                        <td>{{ $vehicule['marque'] }}</td>
                        <td>{{ $vehicule['année'] }}</td>
                        <td>{{ $vehicule['couleur'] }}</td>
                      <td style="text-decoration: line-through;">{{ $vehicule['prix'] }}€</td><td>-{{ $vehicule['reduction'] }}%</td>
                    <td>  {{$vehicule['prix'] - ($vehicule['prix'] * $vehicule['reduction']/100) }}€</td>
                        
                        <td class="d-flex justify-content-end">
                          <form action="/delete/{{$vehicule->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>@endif
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