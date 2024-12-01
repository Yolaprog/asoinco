<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; TOTAL MES FACTURAS PULPAS SEMILLAS
		<hr>
		<a href="?c=TotalFacturasControllers&a=ConsultarTotalFacturasPulpasSemillasControllers" class="btn btn-secondary">Atrás</a>
	</h3>
</div>
<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Año/Mes</th>
					<th>Valor Mes</th>
					<th>Nombre Categoria</th>
                    <th>Nombre Comedor</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($facturasTotal as $facturasTotal): ?>
					<tr class="text-center">
                        <td>
							<?php echo $facturasTotal->getFechaMesFactura(); ?>
						</td>
						<td>
							<?php echo $facturasTotal->getvalor_factura(); ?>
						</td>
                        <td>
							<?php echo $facturasTotal->getnombre_categoria(); ?>
						</td>
                        <td>
							<?php echo $facturasTotal->getnombre_comedor(); ?>
						</td>
                        
					</tr>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</section>