package mx.hackathon.amcea;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;

public class Principal extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.principal);
	}
	
	public void alumno(View View){
		Intent i = new Intent(this, Alumno.class);
		startActivity(i);
	}
	
	public void exalumno(View view){
		Intent i = new Intent (this, Exalumno.class);
		startActivity(i);
	}
	
	public void visita(View view){
		Intent i = new Intent(this, Visita.class);
		startActivity(i);
	}

}
