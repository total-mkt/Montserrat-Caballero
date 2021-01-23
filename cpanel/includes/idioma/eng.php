<?php
// ------------------------------ FORMULARIOS --------------------- //
define('_NOMBRE','Name');
define('_PATERNO','Lastname');
define('_MATERNO','');
define('_TIPO_DE_USUARIO','User Type');
	define('_TIPO_ADMIN','Administrator');
	define('_TIPO_VENDEDOR','Vendor');
	define('_TIPO_CLIENTE','Client');
define('_CIUDAD','City');
define('_AGREGAR_CIUDAD','Add New City');
define('_COSTO_UNITARIO','Unit Cost');
define('_BULTOS','Packages');
define('_EMAIL','E-mail');
define('_TELEFONO','Phone');
define('_CONTACTO','Contact');
define('_DOMICILIO','Adress');
define('_DIRECCION','Adress');

define('_EDITAR','Edit');
define('_BORRAR','Delete');
define('_ACCIONES','Options');
define('_ENVIAR_MSJ','Send Message');
define('_GRUPO','Group');

define('_ORIGEN','Origin');
define('_DESTINO','Destiny');
define('_VIGENCIA','Validity');
define('_VIGENCIA_','From - To');
define('_PAIS','Country');

// ------------------------------ DATATABLES --------------------- //
define('_TABLA_SIN_REGISTROS','Records not found!');
define('_LARGO','Long');
define('_ANCHO','Width');
define('_ALTO','High');

define('_COPIAR','Copy');
define('_CSV','CSV');
define('_EXCEL','Excel');
define('_PDF','PDF');
define('_IMPRIMIR','Print');

define('_PIEZAS_CONTENEDOR','Parts/Container');
define('_TEU','TEU');
define('_BULTOS_CONTENEDOR','Packages/Container');


// ------------------------------ LOGIN --------------------- //
define('_USUARIO','Username');
define('_CLAVE','Password');
define('_EMAIL','E-mail');
define('_OLVIDASTE','Forgot yor password?');
define('_NOTIENES','I don´t have an account');
define('_SOLICITA','Request it');
define('_LOGIN','Login');
define('_CAMBIAR_IDIOMA','Cambiar a');

define('_RESTABlECER_CLAVE','Reset Password');
define('_RESTABlECER_CLAVE_ANUNCIO','The instructions will be sent to your email.');
define('_RESTABlECER','Reset');
define('_REGRESAR_LOGIN','Return to Login');

define('_CERRAR_APP','Close App');
define('_SALIR','Log Out');
define('_CUENTA','ACCOUNT');
define('_ADMINISTRACION','ADMINISTRATION');

// Anuncios ------
define('_PERFECTO','Perfect!');
define('_REGISTRO_EXITOSO','We have sent you an email to verify your account.');
define('_LISTO','Well done!');
define('_LISTO_ANUNCIO','Your email has been verified. Enter your data and access the system.');
define('_REVISA_EMAIL','¡Check your E-mail!');
define('_REVISA_EMAIL_ANUNCIO','We have sent you the instructions to reset your password.');
define('_CAMBIO','New Password!');
define('_CAMBIO_ANUNCIO','We have sent you the new password to your e-mail.');
define('_ERROR','Oops!');
define('_ERROR_ANUNCIO','Enter your E-mail and password to access the system.');

// ------------------------------ REGISTRO --------------------- //
define('_REGISTRO','Register');
define('_SOLICITA_CUENTA','Request your account');
define('_SOLICITA_CUENTA_ANUNCIO','Subject to administrator review.');
define('_TU_NOMBRE','Your Name');
define('_TU_EMAIL','Your E-mail');
define('_TU_TELEFONO','Your Phone');
define('_TU_EMPRESA','Your Company');
define('_ACUERDO','I agree with the');
define('_TERMINOS','Terms');
define('_YA_TIENES','I already have an account!');



// ------------------------------ PERFIL --------------------- //
define('_PERFIL','My Profile');
define('_INBOX','Inbox');
define('_OPCIONES','Settings');
define('_LOGOUT','Logout');
define('_IDIOMA','¿Español?');

// ------------------------------ TOP --------------------- //
define('_BUSCAR','Search & Enter');
define('_NOTIFICACIONES','Notifications');
define('_MENSAJES','Messages');
define('_VER_TODO','See all');


// ------------------------------ TITULOS MENU PRINCIPAL --------------------- //
define('_CATALOGOS','CATALOGS');
define('_ADMINISTRACIÓN','ADMINISTRATION');

// ------------------------------ MENU PRINCIPAL --------------------- //
define('_INICIO','Home');
define('_ADD','Add New');

define('_CATALOGO_CIUDADES','Cities Catalogs');
define('_CIUDAD','City');
define('_CODIGO_PAIS','Country Codes');
	define('_ALTA_CIUDAD','Add City');
	define('_EDITA_CIUDAD','Edit City');
	define('_BORRA_CIUDAD','Borra City');

define('_CATALOGO_INCOTERMS','Incoterms Catalog');
define('_INCOTERMS','Incoterms');
define('_INCOTERM','Incoterm');
	define('_ALTA_INCOTERMS','Add Incoterms');
	define('_EDITA_INCOTERMS','Edit Incoterms');
	define('_BORRA_INCOTERMS','Delete Incoterms');
	define('_AGREGAR_INCOTERMS','Add Incoterms');
	define('_LOCALIZACION','Location');
	define('_ALTA_CIUDAD_INCOTERM','Add New City Incoterm');

define('_CATALOGO_PRODUCTOS','Products Catalogs');
define('_PRODUCTOS','Products');
	define('_ALTA_PRODUCTOS','Add New Product');
define('_AGREGAR_PRODUCTOS','Add Product');
	define('_EDITAR_PRODUCTO','Edit Product');
	define('_BORRAR_PRODUCTO','Delete Product');
define('_MM','Millimeters');
define('_IN','Inches');
define('_PIE','Feet');
define('_ADD_MEDIDA','+ Add New Measure');
define('_AGREGAR_MEDIDA',' and Add New Measures');
define('_ESPESOR','Thickness');
define('_DENSIDAD','Density');
define('_CODIGO_PRODUCTO','Product code');

define('_CATALOGO_COND_PAGO','Payment conditions');
	define('_ALTA_COND_PAGO','Add conditions');
	define('_AGREGAR_COND_PAGO','Add conditions');
	define('_BORARR_COND_PAGO','Delete conditions');
	define('_EDITAR_COND_PAGO','Edit conditions');
	define('_PAGO','Payment');
	define('_CONDICION','Conditions');


define('_CATALOGO_CLIENTES','Clients Catalog');
define('_CLIENTES','Clients');
define('_CLIENTE','Client');
	define('_CLIENTES_NUEVOS','New Clients');
	define('_CLIENTES_TODOS','All Clients');
	define('_ALTA_CLIENTES','Add New Client');

define('_CATALOGO_VENDEDORES','Vendors Catalog');
define('_VENDEDORES','Vendors');
define('_VENDEDOR','Vendor');
	define('_VENDEDORES_TODOS','All Vendors');
	define('_ALTA_VENDEDORES','Add New Vendor');

define('_CATALOGO_USUARIOS','Users Catalog');
define('_USUARIOS','Users');
define('_USUARIO','User');
	define('_USUARIOS_TODOS','All Users');
	define('_ALTA_USUARIOS','Add New Users');

define('_CATALOGO_PROVEEDORES','Suppliers Catalog');
define('_PROVEEDORES','Suppliers');
define('_PROVEEDOR','Supplier');
	define('_PROVEEDORES_NUEVOS','New Suppliers');
	define('_PROVEEDORES_TODOS','All Suppliers');
	define('_ALTA_PROVEEDORES','Add New Supplier');

define('_CATALOGO_COSTOS','Prices Catalog');
define('_COSTOS','Prices');
	define('_EDITAR_COSTO','Edit Price');
	define('_BORRAR_COSTO','Delete Price');
	define('_ALTA_COSTO','Add Price');
define('_PRODUCTO','Product');
define('_MEDIDA','Measure');
define('_GRADO','Grade');
define('_CENTRO','Core');
define('_ENGOMADO','Glue');
define('_PROVEEDOR','Provider');
define('_PRECIO_UNITARIO','Unit price');
define('_ESPESOR','Thickness');

define('_CATALOGO_FLETES','Freights Catalog');
define('_FLETES','Freights');
	define('_EDITAR_FLETE','Edit Freight');
	define('_BORRAR_FLETE','Delete Freight');
	define('_ALTA_FLETE','Add Freight');

define('_CALALOGO_COTIZACION','Quotation Catalog');
define('_COTIZACION','Quotation');
define('_COTIZACIONES','Quotations');
	define('_ALTA_COTIZACION','Add New Quotation');
	define('_COTIZACIONES_CREAR','Add New Quotation');
	define('_BORRAR_COTIZACION','Delete Quotation');
	define('_EDITAR_COTIZACION','Edit Quotation');
define('_PACK_PALL','No. of packages / pallets');
define('_SHEET_PIECES_PALLET','No. of sheets / pieces per package / package / pallet');
define('_TOTAL_SHEETS_PIECES','Total sheets / pieces');

define('_CATALOGO_ORDENES_COMPRA','Purchase Orders Catalog');
define('_ORDEN_COMPRA','Purchase Order');
define('_ORDENES_COMPRA','Purchase Orders');
	define('_ALTA_ORDEN_COMPRA','Add New Purchase Order');
	define('_BORRAR_ORDEN_COMPRA','Delete Purchase Order');
	define('_EDITAR_ORDEN_COMPRA','Edit Purchase Orders');

define('_CALTALOGO_FACTURAS','Invoice Catalog');
define('_FACTURA','Invoice');
define('_FACTURAS','Invoices');
	define('_ALTA_FACTURA','Add New Invoice');
	define('_BORRAR_FACTURA','Delete Invoice');
	define('_EDITAR_FACTURA','Edit Invoice');

define('_MONEDA','Currency');
define('_PAGO','Payment');
	define('_CONTADO','Cash Payment');
	define('_30','30 days');
	define('_90','90 days');
define('_CLIENTE','Client');
define('_VIGENCIA_COTIZACION','validity of quotation');
define('_AGREGAR_PRODUCTO','Add Product');
define('_SELECCIONAR','Select');
define('_CANCELAR','Cancel');
define('_GUARDAR','Save');
define('_GUARDAR_COT','Save Quotation');
define('_CANTIDAD','Quantity');
define('_PIEZAS','Pieces');
define('_UNIDAD_MEDIDA','UM');
define('_CANTIDAD_CONTENEDOR','Qty/container');
define('_CANTIDAD_BULTOS','BulKs/contenedor');
define('_CANTIDAD_PZA','Pieces/contenedor');
define('_CONTENEDOR','Container');
define('_PIE_MADERA','Board Foot');
define('_TIPO_PROD','Product Type');
define('_GRADO_PROD','Product Grade');
define('_MEDIDAS','Measure');
define('_LARGO','Long');
define('_ANCHO','Width');
define('_ALTO','High');
define('_COMENTARIOS','Comments');
define('_DESCUENTOS','Discounts');
define('_DESCUENTO','Discount');
define('_TIPO_DESCUENTOS','Discount Type');
define('_CANTIDAD_FIJA','Fixed Quantity');
define('_CANTIDAD_PORCENTUAL','Percentage Quantity');
define('_DESCRIPCION','Description');
define('_TECLEA_CLIENTE','Type Client');
define('_PROVEEDOR','Provider');
define('_PRECIO_PIEZA','Unit Price');
// Alerta
define('_ALERTA_ADD_TITLE','Well done!');
define('_ALERTA_ADD',' The product has been saved successfully.');
define('_ALERTA_ADD_EEROR_TITLE','Oops!');
define('_ALERTA_ADD_EEROR',' the registration failed. Please, come back and try again.');


// ------------------------------ FOOTER -------------------------- //
define('_DEVELOPED','Developed by Somos Web');
?>