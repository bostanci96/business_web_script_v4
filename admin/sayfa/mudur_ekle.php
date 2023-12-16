<?php echo !defined('ADMIN') ? die(go(ADMIN_URL.'index.php?sayfa=404')) : null;?>
<div class="content-wrapper">
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h2 class="content-header-title float-left mb-0">Müdür Ekle</h2>
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo ADMIN_URL ;?>">Anasayfa</a>
							</li>
							<li class="breadcrumb-item"><a href="<?php echo ADMIN_URL ;?>index.php?sayfa=mudur">Müdürlar</a>
							</li>
							<li class="breadcrumb-item active"><a href="javascript:void(0);">Müdür Ekle</a>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content-body">
		<section id="multiple-column-form">
			<div class="row match-height">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">   <p><b>Müdür</b>  Ekle</p> </h4>
						</div>
						<div class="card-content">
							<div class="card-body">
								<form role="form" class="form-horizontal"  id="forms" method="POST" action="ajax.php?p=fotograf_add"  enctype="multipart/form-data">
									<input type="hidden" name="fotograf_bolum" value="7896" />
									<div class="form-body">
										<div class="row">



											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-2">
														<span>Müdür İsim Soyisim</span>
													</div>
													<div class="col-md-10">
														<fieldset class="position-relative has-icon-left">
															<input type="text" id="first-name" class="form-control" name="fotograf_shortDesc" >
															<div class="form-control-position">
																<i class="feather icon-type"></i>
															</div>
														</fieldset>
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-2">
														<span>Müdür Ünvan</span>
													</div>
													<div class="col-md-10">
														<fieldset class="position-relative has-icon-left">
															<input type="text" id="first-name" class="form-control" name="fotograf_shortDesc2" >
															<div class="form-control-position">
																<i class="feather icon-image"></i>
															</div>
														</fieldset>
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-2">
														<span>Müdür Bio</span>
													</div>
													<div class="col-md-10">
															
														           														
<textarea class="form-control" id="exampleFormControlTextarea1" rows="7"  name="fotograf_longDesc"></textarea>
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-2">
														<span>Seçenekler</span>
													</div>
													<div class="col-md-10">
											
														<fieldset class="form-group">
															<select name="fotograf_sec" class="form-control">
																<option value="0">Yönetim Kurulu İçin</option>
																<option value="1">Bölge Müdürlüğü İçin</option>
															</select>
														</fieldset>
													</div>
												</div>
											</div>
											
		


											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-2">
														<span>Müdür Fotoğrafı</span>
													</div>
													<div class="col-md-10">
														<fieldset class="form-group">                                                    
															<div class="custom-file">
																<input type="file" class="custom-file-input" name="dosya[]" id="dosya[]">
																<label class="custom-file-label" for="inputGroupFile01">Resim Seçiniz</label>
															</div>
														</fieldset>
													</div>
												</div>
											</div>

											<div class="form-group col-md-8 offset-md-4">
											</div>
											<div class="col-md-8 offset-md-4">
												<button type="submit" class="btn btn-primary mr-1 mb-1">Şimdi Yayınla</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<script>
	$(document).ready(function(event) {
		$('#forms').ajaxForm({
			uploadProgress: function(event, position, total, percentComplete) {
				swal({
					title: "Yükleniyor",
					text : "Müdür Yükleniyor. Lütfen Bekleyiniz",
					type : "info",
					closeOnConfirm : false,
					showLoaderOnConfirm:true,
				});
			},
			success: function(data) {
				if(data=="bos-deger"){
					sweetAlert("Hata","Boş Değer Bırakmamalısınız","error");
					return false;
				}else if(data=="basarili"){
					sweetAlert({
						title	: "Başarılı",
						text 	: "Müdür Başarılı Bir Şekilde Eklendi",
						type	: "success"
					},
					function(){
						window.location.reload(true);
					});
					return false;
				}else{
					sweetAlert(data,"Bir hata oluştu !","error");
					return false;
				}
			}
		});

	});
</script>



