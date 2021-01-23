<div id="header-search-modal" class="de-header-search uk-modal-full" style="background-color: rgba(255,255,255,0.95);" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-height-1-1" style="background-color: transparent;">
    <div class="uk-container uk-margin-top"> <a class="uk-modal-close uk-modal-close-full uk-close-large" data-uk-close style="color: #000000;"></a>
      <div class="uk-grid uk-grid-large uk-child-width-1-1 uk-margin-large-top" data-uk-grid>
        <div class="uk-position-relative">
          <form role="search" method="get" action="buscar.php">
            <h2><span class="uk-hidden">Buscar</span>
              <input type="text" name="s" title="search" placeholder="Teclea tu busqueda...">
            </h2>
            <input class="uk-hidden" type="submit" name="submit" value="Buscar" aria-label="submit">
          </form>
          <div class="uk-position-center-right uk-invisible" data-uk-spinner></div>
        </div>
        <div>
          <ul class="de-header-search__result uk-grid uk-child-width-1-2@m" data-uk-grid>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>