-- Description:

In the (near) future, VEMT will be expanding very quickly. You can imagine that we will explore unknown territory. Literally. We will work together with NASA to discover one of the most remote planets in the universe: Pluto. Imagine that a squad of robotic VEMT rovers are to be landed by NASA on a plateau on Pluto. This plateau, which is curiously rectangular, must be navigated by the VEMT rovers so that their on-board cameras can get a complete view of the surrounding terrain to send back to the VEMT HQ.
A VEMT rover’s position is represented by a combination of an x and y coordinates and a letter representing one of the four cardinal compass points. The plateau is divided up into a grid to simplify navigation. An example position might be 0, 0, N, which means the rover is in the bottom left corner and facing North.
To control a VEMT rover, we can send a simple string of letters. The possible letters are L, R and M. L and R makes the rover spin 90 degrees left or right respectively, without moving from its current spot. M means move forward one grid point and maintain the same heading. Assume that the square directly North from (x,y) is (x,y+1).

-- Input:

The problem below requires some kind of input. As a VEMT developer, you are free to implement any mechanism for feeding input into your solution.
The first line of input is the upper-right coordinates of the plateau, the lower-left coordinates are assumed to be (0,0). The rest of the input is information pertaining to the rovers that have been deployed. Each rover has two lines of input. The first line gives the VEMT rover’s position, and the second line is a series of instructions telling the rover how to explore the plateau.
The position is made up of two integers and a letter separated by spaces, corresponding to the x and y co-ordinates and the rover’s orientation. Each rover will be finished sequentially, which means that the second rover won’t start to move until the first one has finished moving.

-- Output:

The output for each rover should be its final co-ordinates and heading.

