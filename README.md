# SpaceDefence
This is my solution to the *Code Test: Space Defence*.

Branch *Part1* is the solution to **Part 1**. *Part2* is the solution to **Part 2**. 

The following text is the solution to **Part 3**.

1) The complexity is actually very low as there is no real nesting and it basically just has one attempt. There is a small amount of wriggle-room if the first calculated positions are already occupied, but it doesn't even look to see if the desired location will be free once the movements have been made. So locations may be discounted unnecessarily. In terms of Big O complexity, there is only one level of for loop. And so the Big O complexity is simply N2.

2) My algorithm is quick and efficient but only provides a solution when the ships don't get in the way of each other. While it is true that with this sample size it generally works, it is not satisfactory as there will be occasions when it doesn't come up with a solution at all. It would be better if it searched for an alternative position rather than just look to see if adjacent cells are free. It would be good (though at the cost of added complexity and time) if it ranked different possibilities so that it really looks at all possible solutions.

3) For this simple solution, it would just require calculating the new positions in 3 rather than 2 dimensions, and finding alternatives by incrementing the third dimension too. And so the complexity would become N3