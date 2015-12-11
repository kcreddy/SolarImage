// I/O
#include <iostream>
#include <stdio.h>
// OpenCV -- include with whatever directories you need to on project machine
#include "include/opencv/cv.h"
#include "include/opencv/cv.hpp"
#include "include/opencv2/opencv.hpp"
#include "include/opencv/highgui.h"

// #include "BlobResult.h"

// Definitions (img dimensions);
// #define h 360
// #define w 720

// g++ -o test_1 maintest.cpp `pkg-config opencv --cflags --libs` -L/jared/Desktop/'Project Folder'/include/build/lib/libopencv_features2d.so
// jared@jared-X58-linux:~/Desktop/Project Folder$ g++ -o test_1 maintest.cpp `pkg-config opencv --cflags --libs` -L/jared/Desktop/'Project Folder'/include/build/lib/libopencv_features2d.so


////////////////////////////////
//							  //
//	AUTHOR:					  //
//	JARED MORRIS			  //
////////////////////////////////
//  LAST STABLE VERSION:	  //
//  15/1702 July 2015	      //
//  151702072015maintest.cpp  //
////////////////////////////////
//	UPDATE LIST:		      //
//  150 lines -> 89 lines     //
////////////////////////////////

using namespace cv;
using namespace std;

int main(int argc, char** argv) {

	const char* filename = "aa.png";  // png for now until FITS is working
	// void *imgVoid; //pointer to image location

	Mat image_matrix_src = imread(filename, CV_LOAD_IMAGE_GRAYSCALE); // grayscale so blobdetect works
		if(image_matrix_src.empty()) {
			std::perror("sucks");
		}

	// invert black/white.  it works for black blobs on white, not white on black, as FITS shows
	Mat image_matrix = Scalar::all(255) - image_matrix_src;

	//set up detector with parameter
	SimpleBlobDetector::Params params;
	params.minDistBetweenBlobs = 5.0;  // blobs must be 5px apart -- prevents false blobs on corners
	params.filterByInertia = false;	   // force false to prevent unexpected true
	params.filterByConvexity = false;  // force false to prevent unexpected true
	params.filterByColor = false; 	   // later, we need to loop to get different colors
	params.filterByCircularity = false;// force false to prevent unexpected true
	params.filterByArea = true;		   // prevent min/max area to not detect background & corners
	params.minArea = 10.0; 		       // 10 pixel minimum area  --  removes corner detection and most glitches.
	params.maxArea = 129601.0; 		   // 129601 pixel maximum area
	SimpleBlobDetector detector(params);

	// create
	SimpleBlobDetector blob_detector(params);

	// detect
	std::vector<KeyPoint> keypoints;
	blob_detector.detect(image_matrix, keypoints);

	// extract coordinates
	for (int i = 0; i < keypoints.size(); i++) {
		float X = keypoints[i].pt.x;
		float Y = keypoints[i].pt.y;
	}

	// write coordinates to file 
	/*
	for ( vector<keypoint>::iterator it = keypoints.begin(); it != keypoints.end(); ++it) {
		Keypoint k = *it;
		cout << k.pt << endl;		// need to link file, not just cout
	}
	*/

	// draw blobs
	Mat blobImg;
	drawKeypoints(image_matrix, keypoints, blobImg, Scalar(12, 127, 240), DrawMatchesFlags::DRAW_RICH_KEYPOINTS);

	// show blobs
	imshow("keypoints", blobImg);
	waitKey(0);

}

