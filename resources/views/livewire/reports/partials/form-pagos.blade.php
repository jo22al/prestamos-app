<div class="row">
    <div class="col-12">
        <div class="h6">Tipos de pagos</div>
        <div class="form-group">
            <select class="form-control form-bord" wire:model.lazy="tipo_pago">
                <option value=0>Todos</option>
                <option value=1>Pagos de esta semana</option>
                <option value=2>Pagos de la semana pasada</option>
            </select>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <button class=" col btn full-width btn-dark btn-block" type="button" wire:click.prevent="$refresh">
                Consultar
            </button>
        </div>
        <div class="row">
            <a href="{{ url("reports/pagos/pdf/$tipo_pago/$typeReportName") }}"
                class="col btn full-width btn-dark btn-block{{ !$pagos->count() ? ' disabled' : '' }}" target="_blank">
                Generar PDF
            </a>
        </div>
    </div>
</div>