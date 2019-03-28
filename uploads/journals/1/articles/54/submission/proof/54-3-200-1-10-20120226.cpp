/* This is a standalone program. Pass an image name as a first parameter
   of the program.  Switch between standard and probabilistic Hough transform
   by changing "#if 1" to "#if 0" and back */
#include <cv.h>
#include <highgui.h>
#include <math.h>
#include <stdio.h>

#define NO_ANTERIOR 3.1

using namespace cv;

int main(int argc, char** argv)
{	
// Txavs-alvs code:
    if (argc != 2)
	return -1;

    VideoCapture cap(argv[1]);
    if (!cap.isOpened())
	return -1;

    // Variables necessaries per executar el 
    // Hough probabilistic
    //vector<Vec4i> linies;
    
    // Hough normal:
    vector<Vec2f> linies;
  
    Mat edges, auxmat, auxlinies, final;

    // Umbral
    float umbral = 10.00;

    //RestorePoints
    double rpa_d, rpb_d, rpx_d, rpy_d = NO_ANTERIOR;
    double rpa_e, rpb_e, rpx_e, rpy_e = NO_ANTERIOR;
    bool rp_e, rp_d = false;

    //namedWindow("Deteccio de carrils", 1);
    for(;;)
    {
	Mat frame;
	cap >> frame; //Agafa un frame de sa camara

	//Feim el canvi de perspectiva
	Point2f org[4];
	Point2f dst[4];
	/* NEGRES 
	org[0] = Point2f(135, 124);
	dst[0] = Point2f(0, 0);	
	
	org[1] = Point2f(535, 122);
	dst[1] = Point2f(720, 0);
	
	org[2] = Point2f(5, 293);
	dst[2] = Point2f(0, 576);

	org[3] = Point2f(717, 286);
	dst[3] = Point2f(720, 576); */
	
	/* GROGUES */
	org[0] = Point2f(126, 158);
	dst[0] = Point2f(0, 0);	
	
	org[1] = Point2f(521, 158);
	dst[1] = Point2f(720, 0);
	
	org[2] = Point2f(2, 317);
	dst[2] = Point2f(0, 576);

	org[3] = Point2f(718, 313);
	dst[3] = Point2f(720, 576);
	
	Mat aux;
	aux = getPerspectiveTransform(org, dst);
	warpPerspective(frame, edges, aux, Size(720, 576));

	//El blurring elimina contorns innecessaris
	cvtColor(edges, auxmat, CV_BGR2GRAY);
	Canny(auxmat, auxmat, 30, 120);
//	Sobel(auxmat, auxmat, IPL_DEPTH_16S, 1, 0, 3);


	// Hough normal
	int idx_esq = 0;
	float rho_esq = 0;
	float theta_esq = 0;

	int idx_drt = 0;
	float rho_drt = 0;
	float theta_drt = 0;
	
	Canny(auxmat, auxmat, 30, 120);
	HoughLines( auxmat, linies, 1, CV_PI/180, 100, 0, 0 );
	for( size_t i = 0; i < MIN(linies.size(),200); i++ )
	{
	    float theta = linies[i][1];
	    float rho = linies[i][0];
	    double a = cos(theta), b = sin(theta);
	    double x0 = a*rho, y0 = b*rho;
	    
	    //Discriminam les linies
	    float graus = (theta*180)/CV_PI;
	    if ((graus >= 0.00) && (graus <= 20.00))
	    {
		if (x0 >= 50 && x0 <= 150)
		{
		    rho_esq += linies[i][0];
		    theta_esq += linies[i][1];
		    idx_esq += 1;
		}
		//line( edges, pt1_e, pt2_e, CV_RGB(255,0,0), 1, CV_AA, 0 );
	    }
	    else if ((graus <= 180.00) && (graus >= 160.00))
	    {
		if (x0 >= 500 && x0<=650)
		{
		    rho_drt += linies[i][0];
		    theta_drt += linies[i][1];
		    idx_drt += 1;
		}
		//line( edges, pt1_e, pt2_e, CV_RGB(255,0,0), 1, CV_AA, 0 );
	    }
	    
	}

	//Pintam sa mitja
        // Feim la mitja de les linies
	rho_esq = rho_esq/idx_esq;
	theta_esq = theta_esq/idx_esq;
	rho_drt = rho_drt/idx_drt;
	theta_drt = theta_drt/idx_drt;

	//Calculam la linia a dibuixar
	// Linia esquerra
	double a_e = cos(theta_esq), b_e = sin(theta_esq);
	double x0_e = a_e*rho_esq, y0_e = b_e*rho_esq;
	//printf("x : %f \n y : %f\n\n", x0_e, y0_e);	
	Point pt1_e(cvRound(x0_e + 1000*(-b_e)),
		    cvRound(y0_e + 1000*(a_e)));
	Point pt2_e(cvRound(x0_e - 1000*(-b_e)),
		    cvRound(y0_e - 1000*(a_e)));
	float graus_e = (theta_esq*180)/CV_PI;
	line( edges, pt1_e, pt2_e, CV_RGB(255,0,0), 2, CV_AA, 0 );

	// Linia dreta
	double a_d = cos(theta_drt), b_d = sin(theta_drt);
	double x0_d = a_d*rho_drt, y0_d = b_d*rho_drt;

	Point pt1_d(cvRound(x0_d + 1000*(-b_d)),
		    cvRound(y0_d + 1000*(a_d)));
	Point pt2_d(cvRound(x0_d - 1000*(-b_d)),
		    cvRound(y0_d - 1000*(a_d)));
	float graus_d = (theta_drt*180)/CV_PI;
	line( edges, pt1_d, pt2_d, CV_RGB(255,0,0), 2, CV_AA, 0 );
	

	//Netejam parametres	
	idx_esq = 0;
	rho_esq = 0;
	theta_esq = 0;

	idx_drt = 0;
	rho_drt = 0;
	theta_drt = 0;

	//Declaram els restore points

	cvtColor(edges, auxmat, CV_BGR2GRAY);
	Canny(auxmat, auxmat, 30, 120);
	HoughLines( auxmat, linies, 1, CV_PI/180, 100, 0, 0 );
	for( size_t i = 0; i < MIN(linies.size(),200); i++ )
	{
	    float theta = linies[i][1];
	    float rho = linies[i][0];
	    double a = cos(theta), b = sin(theta);
	    double x0 = a*rho, y0 = b*rho;	    	    
	    
	    //Discriminam les linies
	    float graus = (theta*180)/CV_PI;
	    //Linia esquerra
	    if ((graus >= 0.00) && (graus <= 30.00))
	    {
		if (x0 >= 40 && x0<=160)
		{
		    rho_esq += linies[i][0];
		    theta_esq += linies[i][1];
		    idx_esq += 1;
		}
	    }
	    //Linia dreta
	    else if ((graus <= 180.00) && (graus >= 150.00))
	    {
		if (x0 >= 490 && x0 <= 660)
		{
		    rho_drt += linies[i][0];
		    theta_drt += linies[i][1];
		    idx_drt += 1;
		}
	    }
	}

	

	// Feim la mitja de les linies
	if (idx_esq > 0)
	{
	    rho_esq = rho_esq/idx_esq;
	    theta_esq = theta_esq/idx_esq;
	    //Calculam la linia a dibuixar
	    a_e = cos(theta_esq), b_e = sin(theta_esq);
	    x0_e = a_e*rho_esq, y0_e = b_e*rho_esq;

	    //Calculam els restore points
	    rpx_e = x0_e;
	    rpy_e = y0_e;
	    rpa_e = a_e;
	    rpb_e = b_e;
	    rp_e = true;
	    
	    Point pt1final_e(cvRound(x0_e + 1000*(-b_e)),
			     cvRound(y0_e + 1000*(a_e)));
	    Point pt2final_e(cvRound(x0_e - 1000*(-b_e)),
			     cvRound(y0_e - 1000*(a_e)));
	    line( edges, pt1final_e, pt2final_e, CV_RGB(255,0,0), 3, CV_AA, 0 );
	}
	else if (idx_esq == 0 && idx_drt>0 && rp_e)
	{
	    Point pt1final_e(cvRound(rpx_e + 1000*(-rpb_e)),
			     cvRound(rpy_e + 1000*(rpa_e)));
	    Point pt2final_e(cvRound(rpx_e - 1000*(-rpb_e)),
			     cvRound(rpy_e - 1000*(rpa_e)));
	    line( edges, pt1final_e, pt2final_e, CV_RGB(255,0,0), 3, CV_AA, 0 );
	    rp_e = false;
	}
	
	if (idx_drt > 0)
	{
	    rho_drt = rho_drt/idx_drt;
	    theta_drt = theta_drt/idx_drt;
	    // Linia dreta
	    a_d = cos(theta_drt), b_d = sin(theta_drt);
	    x0_d = a_d*rho_drt, y0_d = b_d*rho_drt;

	    //Calculam els restore points
	    rpa_d = a_d;
	    rpb_d = b_d;
	    rpy_d = y0_d;
	    rpx_d = x0_d;
	    rp_d = true;

	    Point pt1final_d(cvRound(x0_d + 1000*(-b_d)),
			     cvRound(y0_d + 1000*(a_d)));
	    Point pt2final_d(cvRound(x0_d - 1000*(-b_d)),
			     cvRound(y0_d - 1000*(a_d)));
	    graus_d = (theta_drt*180)/CV_PI;
	    line( edges, pt1final_d, pt2final_d, CV_RGB(255,0,0), 3, CV_AA, 0 );
	}
	else if (idx_drt == 0 && idx_esq > 0 && rp_d)
	{

	    Point pt1final_d(cvRound(rpx_d + 1000*(-rpb_d)),
			     cvRound(rpy_d + 1000*(rpa_d)));
	    Point pt2final_d(cvRound(rpx_d - 1000*(-rpb_d)),
			     cvRound(rpy_d - 1000*(rpa_d)));
	    line( edges, pt1final_d, pt2final_d, CV_RGB(255,0,0), 3, CV_AA, 0 );
	    rp_d = false;
	}

	//Tornam a la perspectiva original
	aux = getPerspectiveTransform(dst, org);
	warpPerspective(edges, frame, aux, Size(720, 576), 
			INTER_LINEAR, BORDER_TRANSPARENT);
	resize(frame, final, Size(720, 576));

	if (idx_esq == 0 && idx_drt == 0)
	{
	    putText(final, "AVIS: SORTIDA DE CARRIL", Point(20, 200),
		    FONT_HERSHEY_PLAIN, 3.0, CV_RGB(0, 255, 0), 3);
	}
	
	imshow("Detecció de carrils", final);//'final' es la bona
	if (waitKey(30) >= 0)
	    break;
    }

    return 0;
}
