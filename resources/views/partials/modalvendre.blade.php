<section>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#vendre">
        Vendez votre voiture
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="vendre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Vendez votre véhicule</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('store.vehicule') }}" method="POST">
                @csrf
                <div class="d-flex flex-column">
                  <label for="marque">marque</label>
                  <input type="text" name="marque" id="marque">
              </div>
              <div class="d-flex flex-column">
                  <label for="année">année</label>
                  <input type="number" name="année" id="année">
              </div>
              <div class="d-flex flex-column">
                <label for="couleur">couleur</label>
                <input type="text" name="couleur" id="couleur">
            </div>
            <div class="d-flex flex-column">
              <label for="prix">prix</label>
              <input type="number" name="prix" id="prix">
          </div>
          <div class="d-flex flex-column">
            <label for="reduction">reduction</label>
            <input type="number" name="reduction" id="reduction">
        </div>
        
             
              <button type="submit" class="btn btn-warning">Vendre le véhicule</button> 
              </form>
            </div>
            <div class="modal-footer">
         
            </div>
          </div>
        </div>
      </div>
    
</section>