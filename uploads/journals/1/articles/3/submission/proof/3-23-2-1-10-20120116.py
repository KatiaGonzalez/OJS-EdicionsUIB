from sage.all import *

def CorbaElliptica(polinomi, n):
    """
	Construeix tota una estructura de corba elliptica 
 	sobre el cos Z_n amb un polinomi de la forma
	Y^2 = X^3 + a*X + b

	EXEMPLE:
	
		sage: x, y = var('x, y')
		sage: CE = CorbaElliptica(y**2 == x**3 + 9*x + 13, 101)
	
    """
    return EllipticCurve(polinomi).change_ring(Zmod(n))

def Clau(CE, P):
    """
	Genera un parell de claus (publica i privada) asociat a la 
	Corba Elliptica CE i al seu punt P.

	EXEMPLE:

		sage: P = CE.random_element()
		sage: Publica, Privada = Clau(CE, P)

    """
    r = CE.order()
    d = randint(2, r-2)
    clau = d*P
    return [(P, clau, r), (d, P, r)]

def Xifrar(CE, claupublica, M):
    """
	Xifra el missatge M (que es un punt de la Corba Elliptica) 
	mitjancant la clau publica donada.
    """
    k = randint(2, claupublica[2]-2)
    C1 = k*claupublica[0]
    C2 = M + k*claupublica[1]
    return (C1, C2)

def Desxifrar(CE, clauprivada, C):
    """
	Desxifra el missatge rebut C mitjancant 
	la clau privada donada.
    """
    M = C[1] - clauprivada[0]*C[0]
    return M

def Firmar(CE, clauprivada, M):
    """
	L'usuari firma el missatge M (en aquest cas un
	valor numeric) que vol enviar amb la seva 
	clau privada.
    """
    k = randint(2, clauprivada[2]-2)
    x,y = (k*clauprivada[1]).xy()
    modul = Zmod(clauprivada[2])
    R = modul(x)
    S = modul(M + R*clauprivada[0])/modul(k)
    return (R, S)

def VerificarFirma(CE, claupublica, M, firma):
    modul = Zmod(claupublica[2])
    w = modul(1)/modul(firma[1])
    u1 = modul(M*w)
    u2 = modul(firma[0]*w)
    U1 = int(u1)*claupublica[0]
    U2 = int(u2)*claupublica[1]
    x,y = (U1 + U2).xy()
    v = modul(x)
    return v == firma[0]

def llistaN(CE,n):
    """
	Retorna una llista de n punts
    """
    p=CE.random_element()
    aux=[]
    i=1
    while i<=n:
        if aux.count(p)==0:
            aux.append(p)
            p=CE.random_element()
            i=i+1
    return aux


#DESASTRES  A PARTIR DE AQUI...
def Xifrar2(CE, claupublica, llista,mensaje):
    """
	Xifra el missatge M (que es un punt de la Corba Elliptica) 
	mitjancant la clau publica donada.
    """
    envio = []
    for letra in mensaje:
	# Toca codificar 'letra'. 
	# Pasamos el caracter a codigo ASCII
	m = ord(letra)
	# print(letra + " -> " + str(m)+"->"+str(llista[m]))
	envio.append(Xifrar(CE,claupublica,llista[m]))
    return envio
def Desxifrar2(CE,clauprivada,llista,mensaje):
    recibido = []
    for letra in mensaje:
	# Primero descodificamos
	m = Desxifrar(CE,clauprivada,letra)
	l=llista.index(m)
	recibido.append("%c" % l) #Para pasar de ASCII a caracter
    final = "" # Para que el resultado sea bonito
    for i in recibido:
	final = final + i
    return final

