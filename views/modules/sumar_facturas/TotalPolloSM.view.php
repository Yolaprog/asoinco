<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; TOTAL POLLO SEMILLAS
		<hr>
		<a href="?c=FacturasControllers&a=consultarFacturasControllersSemillasReporte" class="btn btn-secondary">Atrás</a>
		<a href="?c=TotalFacturasControllers&a=ConsultarTotalMensualFacturasPolloSemillasControllers" class="btn btn-success">VALOR MENSUAL POLLO</a>&nbsp;
	</h3>
	
</div>




<!-- Content -->
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>Valor Total</th>
					<th>Nombre Categoria</th>
					<th>Nombre Comedor</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($facturasTotal as $facturasTotal): ?>
					<tr class="text-center">
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