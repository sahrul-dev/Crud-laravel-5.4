<style type="text/css">
	*{
		margin: 0 auto;
		padding: 0 auto;
	}
	body{
		background: #00001a;
	}
	header{
		background: rgba(0,0,26,0.8);
		color: #f2f2f2;
		position: fixed;
		box-shadow: 0 3px 5px #00001a;
		font-family: Segoe UI;
		padding: 20px;
		width: 100%;
		display: flex;
		color: #fff;
		z-index: 99;
		margin-top: -10%;
	}
	header i{
		font-size: 20px;
		margin-top: 6px;
	}
	header h2{
		font-weight: normal;
	}
	.btn-back{
		float: right;
		margin-right: 30px;
		margin-top: 30px;
		width: 95px;
		padding: 12px;
		transition: .4s ease-out;
		border: none;
		background: #000033;
		outline: none;
		box-shadow: 0 0px 5px #000033;
	}
	.btn-back:hover{
		background: blue;
		box-shadow: 0 0px 5px blue;
	}
	.btn-back:hover a{
		color: #000033;
		text-decoration: none;
	}
	.btn-back a{
		color: blue;
		text-decoration: none;
	}
	form{
		background: #f2f2f2;
		width: 700px;
		margin-top: 10%;
		padding: 30px;
		border-radius: 5px;
		font-family: Segoe UI;
		box-shadow: 0 5px 10px #00001a;
		animation: 1s slide ease-out;
	}
	form:hover{
		box-shadow: 0 0px 10px darkblue;
	}
	@-webkit-keyframes slide {
		from{
			opacity: 0;
			transform: translateX(-10px);
		}
		to{
			opacity: 1;
			transform: translateX(12px);
		}
	}
	form h2{
		font-weight: normal;
	}
	form button{
		border-radius: 5px;
		width: 90px;
		padding: 12px;
		background: green;
		border: none;
		color: #fff;
		transition: .4s ease-out;
		box-shadow: 0 0px 5px green;

	}
	form button:hover{
		border-radius: 5px;
		width: 90px;
		padding: 12px;
		background: lime;
		border: none;
		color: #fff;
		box-shadow: 0 0px 5px lime;

	}
	form h2{
		font-family: Segoe UI;
	}
	form p{
		color: grey;
	}
	form select{
		border: 1px solid #dcdcdc;
		width: 300px;
		padding: 8px;
	}
	form input{
		border: 1px solid #dcdcdc;
		width: 300px;
		padding: 8px;
	}
</style>