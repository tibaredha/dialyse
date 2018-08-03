=SI(sexe="H";
((140-age)*poids)/creatinemie*1,23;
((140-age)*poids)/creatinemie*1,04)



=SI(peau="B";
    SI(
	   sexe="H";
	   186,3*((creatinemie/88,4)^-1,154)*(age^-0,203);
	   186,3*((creatinemie/88,4)^-1,154)*(age^-0,203)*0,742);
	
	SI(
	   sexe="H";
	   186,3*((creatinemie/88,4)^-1,154)*(age^-0,203)*1,212;
	   186,3*((creatinemie/88,4)^-1,154)*(age^-0,203)*1,212*0,742))
	   
	   
	   
=0,007184*(taille^0,725)*(poids^0,425)	   